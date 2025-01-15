<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAsset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|null $description
 * @property string $domainIdentifier
 * @property string|null $externalIdentifier
 * @property list<Shapes\FormInput>|null $formsInput
 * @property list<string>|null $glossaryTerms
 * @property string $name
 * @property string $owningProjectIdentifier
 * @property Shapes\PredictionConfiguration|null $predictionConfiguration
 * @property string $typeIdentifier
 * @property string|null $typeRevision
 */
class CreateAssetRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     description?: string|null,
     *     domainIdentifier: string,
     *     externalIdentifier?: string|null,
     *     formsInput?: list<Shapes\FormInput>|null,
     *     glossaryTerms?: list<string>|null,
     *     name: string,
     *     owningProjectIdentifier: string,
     *     predictionConfiguration?: Shapes\PredictionConfiguration|null,
     *     typeIdentifier: string,
     *     typeRevision?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
