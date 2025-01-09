<?php

namespace Sunaoka\Aws\Structures\Macie2\CreateClassificationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $allowListIds
 * @property string $clientToken
 * @property list<string> $customDataIdentifierIds
 * @property string $description
 * @property bool $initialRun
 * @property 'ONE_TIME'|'SCHEDULED' $jobType
 * @property list<string> $managedDataIdentifierIds
 * @property 'ALL'|'EXCLUDE'|'INCLUDE'|'NONE'|'RECOMMENDED' $managedDataIdentifierSelector
 * @property string $name
 * @property Shapes\S3JobDefinition $s3JobDefinition
 * @property int $samplingPercentage
 * @property Shapes\JobScheduleFrequency $scheduleFrequency
 * @property array<string, string> $tags
 */
class CreateClassificationJobRequest extends Request
{
    /**
     * @param array{
     *     allowListIds?: list<string>,
     *     clientToken: string,
     *     customDataIdentifierIds?: list<string>,
     *     description?: string,
     *     initialRun?: bool,
     *     jobType: 'ONE_TIME'|'SCHEDULED',
     *     managedDataIdentifierIds?: list<string>,
     *     managedDataIdentifierSelector?: 'ALL'|'EXCLUDE'|'INCLUDE'|'NONE'|'RECOMMENDED',
     *     name: string,
     *     s3JobDefinition: Shapes\S3JobDefinition,
     *     samplingPercentage?: int,
     *     scheduleFrequency?: Shapes\JobScheduleFrequency,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
