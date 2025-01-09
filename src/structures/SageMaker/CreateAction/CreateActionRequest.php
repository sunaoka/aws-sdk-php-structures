<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ActionName
 * @property Shapes\ActionSource $Source
 * @property string $ActionType
 * @property string $Description
 * @property 'Unknown'|'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped' $Status
 * @property array<string, string> $Properties
 * @property Shapes\MetadataProperties $MetadataProperties
 * @property list<Shapes\Tag> $Tags
 */
class CreateActionRequest extends Request
{
    /**
     * @param array{
     *     ActionName: string,
     *     Source: Shapes\ActionSource,
     *     ActionType: string,
     *     Description?: string,
     *     Status?: 'Unknown'|'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped',
     *     Properties?: array<string, string>,
     *     MetadataProperties?: Shapes\MetadataProperties,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
