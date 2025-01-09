<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\DescribeMappedResourceConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamName
 * @property string $StreamARN
 * @property int<1, 1> $MaxResults
 * @property string $NextToken
 */
class DescribeMappedResourceConfigurationRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string,
     *     StreamARN?: string,
     *     MaxResults?: int<1, 1>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
