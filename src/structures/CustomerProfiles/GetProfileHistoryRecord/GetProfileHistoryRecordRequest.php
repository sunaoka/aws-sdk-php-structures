<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetProfileHistoryRecord;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $ProfileId
 * @property string $Id
 */
class GetProfileHistoryRecordRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     ProfileId: string,
     *     Id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
