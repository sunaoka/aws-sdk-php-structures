<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\AssociateMpaTeam;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'IMPORT_ROOT_PUBLIC_KEY_CERTIFICATE' $Action
 * @property string $MpaTeamArn
 * @property string|null $RequesterComment
 */
class AssociateMpaTeamRequest extends Request
{
    /**
     * @param array{
     *     Action: 'IMPORT_ROOT_PUBLIC_KEY_CERTIFICATE',
     *     MpaTeamArn: string,
     *     RequesterComment?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
