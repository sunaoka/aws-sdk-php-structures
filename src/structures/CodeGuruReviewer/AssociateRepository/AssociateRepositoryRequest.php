<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\AssociateRepository;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Repository $Repository
 * @property string|null $ClientRequestToken
 * @property array<string, string>|null $Tags
 * @property Shapes\KMSKeyDetails|null $KMSKeyDetails
 */
class AssociateRepositoryRequest extends Request
{
    /**
     * @param array{
     *     Repository: Shapes\Repository,
     *     ClientRequestToken?: string|null,
     *     Tags?: array<string, string>|null,
     *     KMSKeyDetails?: Shapes\KMSKeyDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
