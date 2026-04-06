<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ValidateAwsAssociations;

trait ValidateAwsAssociationsTrait
{
    /**
     * @param ValidateAwsAssociationsRequest $args
     * @return ValidateAwsAssociationsResponse
     */
    public function validateAwsAssociations(ValidateAwsAssociationsRequest $args)
    {
        $result = parent::validateAwsAssociations($args->toArray());
        return new ValidateAwsAssociationsResponse($result->toArray());
    }
}
