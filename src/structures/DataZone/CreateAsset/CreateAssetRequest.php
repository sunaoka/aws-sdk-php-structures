<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAsset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $description
 * @property string $domainIdentifier
 * @property string $externalIdentifier
 * @property list<Shapes\FormInput> $formsInput
 * @property list<string> $glossaryTerms
 * @property string $name
 * @property string $owningProjectIdentifier
 * @property Shapes\PredictionConfiguration $predictionConfiguration
 * @property string $typeIdentifier
 * @property string $typeRevision
 */
class CreateAssetRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     description?: string,
     *     domainIdentifier: string,
     *     externalIdentifier?: string,
     *     formsInput?: list<Shapes\FormInput>,
     *     glossaryTerms?: list<string>,
     *     name: string,
     *     owningProjectIdentifier: string,
     *     predictionConfiguration?: Shapes\PredictionConfiguration,
     *     typeIdentifier: string,
     *     typeRevision?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
