<?php

namespace Sunaoka\Aws\Structures\LocationService\ListKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Package
 * @property string $CertificateFingerprint
 */
class AndroidApp extends Shape
{
    /**
     * @param array{
     *     Package: string,
     *     CertificateFingerprint: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
