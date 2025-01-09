<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListCompositions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $filterByStageArn
 * @property string $filterByEncoderConfigurationArn
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListCompositionsRequest extends Request
{
    /**
     * @param array{
     *     filterByStageArn?: string,
     *     filterByEncoderConfigurationArn?: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
