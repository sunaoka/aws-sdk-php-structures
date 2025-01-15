<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Description
 * @property 'LEGACY'|'NEW_READER_EXPERIENCE'|null $UserExperienceVersion
 * @property list<DatasetMetadata>|null $DataSets
 * @property TopicConfigOptions|null $ConfigOptions
 */
class TopicDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Description?: string|null,
     *     UserExperienceVersion?: 'LEGACY'|'NEW_READER_EXPERIENCE'|null,
     *     DataSets?: list<DatasetMetadata>|null,
     *     ConfigOptions?: TopicConfigOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
