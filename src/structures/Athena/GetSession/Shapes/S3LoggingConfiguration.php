<?php

namespace Sunaoka\Aws\Structures\Athena\GetSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property string|null $KmsKey
 * @property string|null $LogLocation
 */
class S3LoggingConfiguration extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     KmsKey?: string|null,
     *     LogLocation?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
