<?php

namespace Sunaoka\Aws\Structures\Connect\CreateTestCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $Name
 * @property string|null $Description
 * @property string $Content
 * @property Shapes\TestCaseEntryPoint|null $EntryPoint
 * @property string|null $InitializationData
 * @property 'PUBLISHED'|'SAVED'|null $Status
 * @property string|null $TestCaseId
 * @property array<string, string>|null $Tags
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $LastModifiedRegion
 */
class CreateTestCaseRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Name: string,
     *     Description?: string|null,
     *     Content: string,
     *     EntryPoint?: Shapes\TestCaseEntryPoint|null,
     *     InitializationData?: string|null,
     *     Status?: 'PUBLISHED'|'SAVED'|null,
     *     TestCaseId?: string|null,
     *     Tags?: array<string, string>|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedRegion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
