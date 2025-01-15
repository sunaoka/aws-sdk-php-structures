<?php

namespace Sunaoka\Aws\Structures\Macie2\CreateClassificationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $allowListIds
 * @property string $clientToken
 * @property list<string>|null $customDataIdentifierIds
 * @property string|null $description
 * @property bool|null $initialRun
 * @property 'ONE_TIME'|'SCHEDULED' $jobType
 * @property list<string>|null $managedDataIdentifierIds
 * @property 'ALL'|'EXCLUDE'|'INCLUDE'|'NONE'|'RECOMMENDED'|null $managedDataIdentifierSelector
 * @property string $name
 * @property Shapes\S3JobDefinition $s3JobDefinition
 * @property int|null $samplingPercentage
 * @property Shapes\JobScheduleFrequency|null $scheduleFrequency
 * @property array<string, string>|null $tags
 */
class CreateClassificationJobRequest extends Request
{
    /**
     * @param array{
     *     allowListIds?: list<string>|null,
     *     clientToken: string,
     *     customDataIdentifierIds?: list<string>|null,
     *     description?: string|null,
     *     initialRun?: bool|null,
     *     jobType: 'ONE_TIME'|'SCHEDULED',
     *     managedDataIdentifierIds?: list<string>|null,
     *     managedDataIdentifierSelector?: 'ALL'|'EXCLUDE'|'INCLUDE'|'NONE'|'RECOMMENDED'|null,
     *     name: string,
     *     s3JobDefinition: Shapes\S3JobDefinition,
     *     samplingPercentage?: int|null,
     *     scheduleFrequency?: Shapes\JobScheduleFrequency|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
