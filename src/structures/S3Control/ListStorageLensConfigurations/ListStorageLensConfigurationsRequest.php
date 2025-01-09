<?php

namespace Sunaoka\Aws\Structures\S3Control\ListStorageLensConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $NextToken
 */
class ListStorageLensConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
