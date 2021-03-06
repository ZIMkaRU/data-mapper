<?php

namespace Troytft\DataMapperBundle\DataTransformer;

class BooleanDataTransformer extends BaseDataTransformer implements DataTransformerInterface
{
    public function transform($value)
    {
        return filter_var($value, FILTER_VALIDATE_BOOLEAN);
    }
}