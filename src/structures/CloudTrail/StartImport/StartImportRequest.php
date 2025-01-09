<?php

namespace Sunaoka\Aws\Structures\CloudTrail\StartImport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $Destinations
 * @property Shapes\ImportSource $ImportSource
 * @property \Aws\Api\DateTimeResult $StartEventTime
 * @property \Aws\Api\DateTimeResult $EndEventTime
 * @property string $ImportId
 */
class StartImportRequest extends Request
{
    /**
     * @param array{
     *     Destinations?: list<string>,
     *     ImportSource?: Shapes\ImportSource,
     *     StartEventTime?: \Aws\Api\DateTimeResult,
     *     EndEventTime?: \Aws\Api\DateTimeResult,
     *     ImportId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
