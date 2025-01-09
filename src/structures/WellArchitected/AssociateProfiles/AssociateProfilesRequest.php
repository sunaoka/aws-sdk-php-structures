<?php

namespace Sunaoka\Aws\Structures\WellArchitected\AssociateProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadId
 * @property list<string> $ProfileArns
 */
class AssociateProfilesRequest extends Request
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
