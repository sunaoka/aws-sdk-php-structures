<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAssetRevision;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|null $description
 * @property string $domainIdentifier
 * @property list<Shapes\FormInput>|null $formsInput
 * @property list<string>|null $glossaryTerms
 * @property string $identifier
 * @property string $name
 * @property Shapes\PredictionConfiguration|null $predictionConfiguration
 * @property string|null $typeRevision
 */
class CreateAssetRevisionRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     description?: string|null,
     *     domainIdentifier: string,
     *     formsInput?: list<Shapes\FormInput>|null,
     *     glossaryTerms?: list<string>|null,
     *     identifier: string,
     *     name: string,
     *     predictionConfiguration?: Shapes\PredictionConfiguration|null,
     *     typeRevision?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
