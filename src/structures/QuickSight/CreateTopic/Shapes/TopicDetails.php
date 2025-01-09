<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Description
 * @property 'LEGACY'|'NEW_READER_EXPERIENCE' $UserExperienceVersion
 * @property list<DatasetMetadata> $DataSets
 * @property TopicConfigOptions $ConfigOptions
 */
class TopicDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Description?: string,
     *     UserExperienceVersion?: 'LEGACY'|'NEW_READER_EXPERIENCE',
     *     DataSets?: list<DatasetMetadata>,
     *     ConfigOptions?: TopicConfigOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
