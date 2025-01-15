<?php

namespace Sunaoka\Aws\Structures\EMRServerless\StartJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property string|null $logGroupName
 * @property string|null $logStreamNamePrefix
 * @property string|null $encryptionKeyArn
 * @property array<string, list<string>>|null $logTypes
 */
class CloudWatchLoggingConfiguration extends Shape
{
    /**
     * @param array{
     *     enabled: bool,
     *     logGroupName?: string|null,
     *     logStreamNamePrefix?: string|null,
     *     encryptionKeyArn?: string|null,
     *     logTypes?: array<string, list<string>>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
