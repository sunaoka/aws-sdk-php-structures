<?php

namespace Sunaoka\Aws\Structures\Emr\RunJobFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property string|null $LogGroupName
 * @property string|null $LogStreamNamePrefix
 * @property string|null $EncryptionKeyArn
 * @property array<string, list<string>>|null $LogTypes
 */
class CloudWatchLogConfiguration extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     LogGroupName?: string|null,
     *     LogStreamNamePrefix?: string|null,
     *     EncryptionKeyArn?: string|null,
     *     LogTypes?: array<string, list<string>>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
