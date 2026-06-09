<?php

namespace Sunaoka\Aws\Structures\Odb\GetAutonomousDatabaseWalletDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $autonomousDatabaseId
 */
class GetAutonomousDatabaseWalletDetailsRequest extends Request
{
    /**
     * @param array{autonomousDatabaseId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
