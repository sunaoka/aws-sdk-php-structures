<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateSegmentDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $SegmentDefinitionName
 * @property string $DisplayName
 * @property string|null $Description
 * @property Shapes\SegmentGroup $SegmentGroups
 * @property array<string, string>|null $Tags
 */
class CreateSegmentDefinitionRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     SegmentDefinitionName: string,
     *     DisplayName: string,
     *     Description?: string|null,
     *     SegmentGroups: Shapes\SegmentGroup,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
