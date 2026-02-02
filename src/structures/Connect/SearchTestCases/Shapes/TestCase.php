<?php

namespace Sunaoka\Aws\Structures\Connect\SearchTestCases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $Content
 * @property TestCaseEntryPoint|null $EntryPoint
 * @property string|null $InitializationData
 * @property string|null $Description
 * @property 'PUBLISHED'|'SAVED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $LastModifiedRegion
 * @property array<string, string>|null $Tags
 * @property string|null $TestCaseSha256
 */
class TestCase extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Id?: string|null,
     *     Name?: string|null,
     *     Content?: string|null,
     *     EntryPoint?: TestCaseEntryPoint|null,
     *     InitializationData?: string|null,
     *     Description?: string|null,
     *     Status?: 'PUBLISHED'|'SAVED'|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedRegion?: string|null,
     *     Tags?: array<string, string>|null,
     *     TestCaseSha256?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
