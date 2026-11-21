<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListListingAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $specializationId
 * @property string $specializationName
 * @property string|null $description
 * @property list<SpecializationTypeDetail> $specializationTypes
 * @property list<string>|null $caseStudyIds
 */
class Specialization extends Shape
{
    /**
     * @param array{
     *     specializationId: string,
     *     specializationName: string,
     *     description?: string|null,
     *     specializationTypes: list<SpecializationTypeDetail>,
     *     caseStudyIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
