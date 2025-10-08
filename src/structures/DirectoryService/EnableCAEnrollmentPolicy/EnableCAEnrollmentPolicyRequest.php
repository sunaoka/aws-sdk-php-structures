<?php

namespace Sunaoka\Aws\Structures\DirectoryService\EnableCAEnrollmentPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property string $PcaConnectorArn
 */
class EnableCAEnrollmentPolicyRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     PcaConnectorArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
