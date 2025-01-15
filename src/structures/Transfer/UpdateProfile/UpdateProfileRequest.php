<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProfileId
 * @property list<string>|null $CertificateIds
 */
class UpdateProfileRequest extends Request
{
    /**
     * @param array{
     *     ProfileId: string,
     *     CertificateIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
