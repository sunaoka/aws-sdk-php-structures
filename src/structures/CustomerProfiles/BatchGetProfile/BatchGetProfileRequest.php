<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\BatchGetProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property list<string> $ProfileIds
 */
class BatchGetProfileRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     ProfileIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
