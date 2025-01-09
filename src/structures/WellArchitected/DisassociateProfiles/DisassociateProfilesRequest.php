<?php

namespace Sunaoka\Aws\Structures\WellArchitected\DisassociateProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadId
 * @property list<string> $ProfileArns
 */
class DisassociateProfilesRequest extends Request
{
    /**
     * @param array{
     *     WorkloadId: string,
     *     ProfileArns: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
