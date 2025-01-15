<?php

namespace Sunaoka\Aws\Structures\CloudTrail\StartImport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $Destinations
 * @property Shapes\ImportSource|null $ImportSource
 * @property \Aws\Api\DateTimeResult|null $StartEventTime
 * @property \Aws\Api\DateTimeResult|null $EndEventTime
 * @property string|null $ImportId
 */
class StartImportRequest extends Request
{
    /**
     * @param array{
     *     Destinations?: list<string>|null,
     *     ImportSource?: Shapes\ImportSource|null,
     *     StartEventTime?: \Aws\Api\DateTimeResult|null,
     *     EndEventTime?: \Aws\Api\DateTimeResult|null,
     *     ImportId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
