<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateTestCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $TestCaseId
 * @property string|null $Content
 * @property Shapes\TestCaseEntryPoint|null $EntryPoint
 * @property string|null $InitializationData
 * @property string|null $Name
 * @property string|null $Description
 * @property 'PUBLISHED'|'SAVED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $LastModifiedRegion
 */
class UpdateTestCaseRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     TestCaseId: string,
     *     Content?: string|null,
     *     EntryPoint?: Shapes\TestCaseEntryPoint|null,
     *     InitializationData?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Status?: 'PUBLISHED'|'SAVED'|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedRegion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
