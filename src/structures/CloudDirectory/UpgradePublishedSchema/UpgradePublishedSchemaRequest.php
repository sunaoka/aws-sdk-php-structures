<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\UpgradePublishedSchema;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DevelopmentSchemaArn
 * @property string $PublishedSchemaArn
 * @property string $MinorVersion
 * @property bool|null $DryRun
 */
class UpgradePublishedSchemaRequest extends Request
{
    /**
     * @param array{
     *     DevelopmentSchemaArn: string,
     *     PublishedSchemaArn: string,
     *     MinorVersion: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
