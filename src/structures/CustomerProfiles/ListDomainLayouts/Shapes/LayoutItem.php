<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListDomainLayouts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LayoutDefinitionName
 * @property string $Description
 * @property string $DisplayName
 * @property bool|null $IsDefault
 * @property 'PROFILE_EXPLORER' $LayoutType
 * @property array<string, string>|null $Tags
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 */
class LayoutItem extends Shape
{
    /**
     * @param array{
     *     LayoutDefinitionName: string,
     *     Description: string,
     *     DisplayName: string,
     *     IsDefault?: bool|null,
     *     LayoutType: 'PROFILE_EXPLORER',
     *     Tags?: array<string, string>|null,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     LastUpdatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
