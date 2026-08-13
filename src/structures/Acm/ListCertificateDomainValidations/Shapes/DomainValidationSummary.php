<?php

namespace Sunaoka\Aws\Structures\Acm\ListCertificateDomainValidations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainName
 * @property ValidationConfiguration|null $ActiveValidationConfiguration
 * @property ValidationConfiguration|null $RequestedValidationConfiguration
 */
class DomainValidationSummary extends Shape
{
    /**
     * @param array{
     *     DomainName: string,
     *     ActiveValidationConfiguration?: ValidationConfiguration|null,
     *     RequestedValidationConfiguration?: ValidationConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
