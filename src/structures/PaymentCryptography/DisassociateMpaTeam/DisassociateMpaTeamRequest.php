<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\DisassociateMpaTeam;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'IMPORT_ROOT_PUBLIC_KEY_CERTIFICATE' $Action
 * @property string|null $RequesterComment
 */
class DisassociateMpaTeamRequest extends Request
{
    /**
     * @param array{
     *     Action: 'IMPORT_ROOT_PUBLIC_KEY_CERTIFICATE',
     *     RequesterComment?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
