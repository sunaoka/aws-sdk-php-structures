<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\ListPartners\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Catalog
 * @property string $Arn
 * @property string $Id
 * @property string $LegalName
 * @property \Aws\Api\DateTimeResult $CreatedAt
 */
class PartnerSummary extends Shape
{
    /**
     * @param array{
     *     Catalog: string,
     *     Arn: string,
     *     Id: string,
     *     LegalName: string,
     *     CreatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
