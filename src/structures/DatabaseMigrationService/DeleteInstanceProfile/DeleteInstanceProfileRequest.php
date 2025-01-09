<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteInstanceProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceProfileIdentifier
 */
class DeleteInstanceProfileRequest extends Request
{
    /**
     * @param array{InstanceProfileIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
