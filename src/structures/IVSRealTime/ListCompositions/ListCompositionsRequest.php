<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListCompositions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $filterByStageArn
 * @property string|null $filterByEncoderConfigurationArn
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListCompositionsRequest extends Request
{
    /**
     * @param array{
     *     filterByStageArn?: string|null,
     *     filterByEncoderConfigurationArn?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
