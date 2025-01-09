<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateSegmentDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $SegmentDefinitionName
 * @property string $DisplayName
 * @property string $Description
 * @property Shapes\SegmentGroup $SegmentGroups
 * @property array<string, string> $Tags
 */
class CreateSegmentDefinitionRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     SegmentDefinitionName: string,
     *     DisplayName: string,
     *     Description?: string,
     *     SegmentGroups: Shapes\SegmentGroup,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
