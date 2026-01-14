<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAssetRevision;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $domainIdentifier
 * @property string $identifier
 * @property string|null $typeRevision
 * @property string|null $description
 * @property list<string>|null $glossaryTerms
 * @property list<Shapes\FormInput>|null $formsInput
 * @property Shapes\PredictionConfiguration|null $predictionConfiguration
 * @property string|null $clientToken
 */
class CreateAssetRevisionRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     domainIdentifier: string,
     *     identifier: string,
     *     typeRevision?: string|null,
     *     description?: string|null,
     *     glossaryTerms?: list<string>|null,
     *     formsInput?: list<Shapes\FormInput>|null,
     *     predictionConfiguration?: Shapes\PredictionConfiguration|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
