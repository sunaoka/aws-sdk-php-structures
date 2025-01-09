<?php

namespace Sunaoka\Aws\Structures\EMRServerless\GetApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property string $logGroupName
 * @property string $logStreamNamePrefix
 * @property string $encryptionKeyArn
 * @property array<string, list<string>> $logTypes
 */
class CloudWatchLoggingConfiguration extends Shape
{
    /**
     * @param array{
     *     enabled: bool,
     *     logGroupName?: string,
     *     logStreamNamePrefix?: string,
     *     encryptionKeyArn?: string,
     *     logTypes?: array<string, list<string>>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
