<?php

namespace Sunaoka\Aws\Structures\Outposts\CreateQuote\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'UPDATED_RACK'|'NEW_RACK'|'EXISTING_RACK'|'SERVER'|null $QuoteSpecificationType
 * @property RackSpecificationDetails|null $ExistingRackSpecificationDetails
 * @property RackSpecificationDetails|null $FinalRackSpecificationDetails
 * @property ServerSpecificationDetails|null $ServerSpecificationDetails
 */
class QuoteSpecification extends Shape
{
    /**
     * @param array{
     *     QuoteSpecificationType?: 'UPDATED_RACK'|'NEW_RACK'|'EXISTING_RACK'|'SERVER'|null,
     *     ExistingRackSpecificationDetails?: RackSpecificationDetails|null,
     *     FinalRackSpecificationDetails?: RackSpecificationDetails|null,
     *     ServerSpecificationDetails?: ServerSpecificationDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
