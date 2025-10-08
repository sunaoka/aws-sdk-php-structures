<?php

namespace Sunaoka\Aws\Structures\Ec2\RestoreManagedPrefixListVersion;

trait RestoreManagedPrefixListVersionTrait
{
    /**
     * @param RestoreManagedPrefixListVersionRequest $args
     * @return RestoreManagedPrefixListVersionResponse
     */
    public function restoreManagedPrefixListVersion(RestoreManagedPrefixListVersionRequest $args)
    {
        $result = parent::restoreManagedPrefixListVersion($args->toArray());
        return new RestoreManagedPrefixListVersionResponse($result->toArray());
    }
}
