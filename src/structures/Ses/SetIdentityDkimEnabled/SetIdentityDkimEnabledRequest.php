<?php

namespace Sunaoka\Aws\Structures\Ses\SetIdentityDkimEnabled;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identity
 * @property bool $DkimEnabled
 */
class SetIdentityDkimEnabledRequest extends Request
{
    /**
     * @param array{
     *     Identity: string,
     *     DkimEnabled: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
