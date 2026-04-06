<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetManagedCertificateDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Domain
 * @property string|null $RedirectTo
 * @property string|null $RedirectFrom
 */
class ValidationTokenDetail extends Shape
{
    /**
     * @param array{
     *     Domain: string,
     *     RedirectTo?: string|null,
     *     RedirectFrom?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
