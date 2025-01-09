<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAssetRevision;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $description
 * @property string $domainIdentifier
 * @property list<Shapes\FormInput> $formsInput
 * @property list<string> $glossaryTerms
 * @property string $identifier
 * @property string $name
 * @property Shapes\PredictionConfiguration $predictionConfiguration
 * @property string $typeRevision
 */
class CreateAssetRevisionRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     description?: string,
     *     domainIdentifier: string,
     *     formsInput?: list<Shapes\FormInput>,
     *     glossaryTerms?: list<string>,
     *     identifier: string,
     *     name: string,
     *     predictionConfiguration?: Shapes\PredictionConfiguration,
     *     typeRevision?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
