<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\AssociateRepository;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Repository $Repository
 * @property string $ClientRequestToken
 * @property array<string, string> $Tags
 * @property Shapes\KMSKeyDetails $KMSKeyDetails
 */
class AssociateRepositoryRequest extends Request
{
    /**
     * @param array{
     *     Repository: Shapes\Repository,
     *     ClientRequestToken?: string,
     *     Tags?: array<string, string>,
     *     KMSKeyDetails?: Shapes\KMSKeyDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
