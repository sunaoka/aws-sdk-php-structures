<?php

namespace Sunaoka\Aws\Structures\Odb\ListAutonomousDatabaseClones\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $consumerGroup
 * @property string|null $displayName
 * @property string|null $hostFormat
 * @property bool|null $isRegional
 * @property string|null $protocol
 * @property string|null $sessionMode
 * @property string|null $syntaxFormat
 * @property string|null $tlsAuthentication
 * @property string|null $value
 */
class DatabaseConnectionStringProfile extends Shape
{
    /**
     * @param array{
     *     consumerGroup?: string|null,
     *     displayName?: string|null,
     *     hostFormat?: string|null,
     *     isRegional?: bool|null,
     *     protocol?: string|null,
     *     sessionMode?: string|null,
     *     syntaxFormat?: string|null,
     *     tlsAuthentication?: string|null,
     *     value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
