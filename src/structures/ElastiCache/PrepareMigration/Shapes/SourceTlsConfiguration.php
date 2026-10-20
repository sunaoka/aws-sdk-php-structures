<?php

namespace Sunaoka\Aws\Structures\ElastiCache\PrepareMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'none'|'verify-ca'|null $SourceTlsMode
 * @property string|null $SourceTlsCertificate
 */
class SourceTlsConfiguration extends Shape
{
    /**
     * @param array{
     *     SourceTlsMode?: 'none'|'verify-ca'|null,
     *     SourceTlsCertificate?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
