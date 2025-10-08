<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeAccountPreferences;

trait DescribeAccountPreferencesTrait
{
    /**
     * @param DescribeAccountPreferencesRequest $args
     * @return DescribeAccountPreferencesResponse
     */
    public function describeAccountPreferences(DescribeAccountPreferencesRequest $args)
    {
        $result = parent::describeAccountPreferences($args->toArray());
        return new DescribeAccountPreferencesResponse($result->toArray());
    }
}
