<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\ListMicrovmImageBuilds;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 * @property string $imageIdentifier
 * @property string $imageVersion
 * @property 'ARM_64'|null $architecture
 * @property 'GRAVITON'|null $chipset
 * @property string|null $chipsetGeneration
 */
class ListMicrovmImageBuildsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null,
     *     imageIdentifier: string,
     *     imageVersion: string,
     *     architecture?: 'ARM_64'|null,
     *     chipset?: 'GRAVITON'|null,
     *     chipsetGeneration?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
