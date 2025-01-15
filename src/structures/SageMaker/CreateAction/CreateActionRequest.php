<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ActionName
 * @property Shapes\ActionSource $Source
 * @property string $ActionType
 * @property string|null $Description
 * @property 'Unknown'|'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|null $Status
 * @property array<string, string>|null $Properties
 * @property Shapes\MetadataProperties|null $MetadataProperties
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateActionRequest extends Request
{
    /**
     * @param array{
     *     ActionName: string,
     *     Source: Shapes\ActionSource,
     *     ActionType: string,
     *     Description?: string|null,
     *     Status?: 'Unknown'|'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|null,
     *     Properties?: array<string, string>|null,
     *     MetadataProperties?: Shapes\MetadataProperties|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
