<?php

namespace Sunaoka\Aws\Structures\MigrationHub\PutResourceAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProgressUpdateStream
 * @property string $MigrationTaskName
 * @property list<Shapes\ResourceAttribute> $ResourceAttributeList
 * @property bool|null $DryRun
 */
class PutResourceAttributesRequest extends Request
{
    /**
     * @param array{
     *     ProgressUpdateStream: string,
     *     MigrationTaskName: string,
     *     ResourceAttributeList: list<Shapes\ResourceAttribute>,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
