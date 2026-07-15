<?php

namespace Sunaoka\Aws\Structures\HealthLake\CreateDataTransformationProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StarterProfileSource|null $StarterProfile
 * @property ExistingVersionedProfileSource|null $ExistingVersionedProfileId
 * @property ProfileMappingSource|null $ProfileMapping
 * @property SampleDataSource|null $SampleData
 */
class CreateDataTransformationProfileSource extends Shape
{
    /**
     * @param array{
     *     StarterProfile?: StarterProfileSource|null,
     *     ExistingVersionedProfileId?: ExistingVersionedProfileSource|null,
     *     ProfileMapping?: ProfileMappingSource|null,
     *     SampleData?: SampleDataSource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
