<?php

namespace Sunaoka\Aws\Structures\Ses\GetIdentityDkimAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $DkimEnabled
 * @property 'Pending'|'Success'|'Failed'|'TemporaryFailure'|'NotStarted' $DkimVerificationStatus
 * @property list<string>|null $DkimTokens
 */
class IdentityDkimAttributes extends Shape
{
    /**
     * @param array{
     *     DkimEnabled: bool,
     *     DkimVerificationStatus: 'Pending'|'Success'|'Failed'|'TemporaryFailure'|'NotStarted',
     *     DkimTokens?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
