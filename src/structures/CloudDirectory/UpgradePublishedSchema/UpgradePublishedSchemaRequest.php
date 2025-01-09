<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\UpgradePublishedSchema;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DevelopmentSchemaArn
 * @property string $PublishedSchemaArn
 * @property string $MinorVersion
 * @property bool $DryRun
 */
class UpgradePublishedSchemaRequest extends Request
{
    /**
     * @param array{
     *     DevelopmentSchemaArn: string,
     *     PublishedSchemaArn: string,
     *     MinorVersion: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
