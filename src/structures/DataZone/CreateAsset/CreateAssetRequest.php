<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAsset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $domainIdentifier
 * @property string|null $externalIdentifier
 * @property string $typeIdentifier
 * @property string|null $typeRevision
 * @property string|null $description
 * @property list<string>|null $glossaryTerms
 * @property list<Shapes\FormInput>|null $formsInput
 * @property string $owningProjectIdentifier
 * @property Shapes\PredictionConfiguration|null $predictionConfiguration
 * @property string|null $clientToken
 */
class CreateAssetRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     domainIdentifier: string,
     *     externalIdentifier?: string|null,
     *     typeIdentifier: string,
     *     typeRevision?: string|null,
     *     description?: string|null,
     *     glossaryTerms?: list<string>|null,
     *     formsInput?: list<Shapes\FormInput>|null,
     *     owningProjectIdentifier: string,
     *     predictionConfiguration?: Shapes\PredictionConfiguration|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
