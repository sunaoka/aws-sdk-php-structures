<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\CreateCodeReview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Endpoint>|null $endpoints
 * @property list<Actor>|null $actors
 * @property list<DocumentInfo>|null $documents
 * @property list<SourceCodeRepository>|null $sourceCode
 * @property list<IntegratedRepository>|null $integratedRepositories
 * @property list<TrustedCaCertificate>|null $trustedCaCertificates
 * @property list<ClientCertificate>|null $clientCertificates
 */
class Assets extends Shape
{
    /**
     * @param array{
     *     endpoints?: list<Endpoint>|null,
     *     actors?: list<Actor>|null,
     *     documents?: list<DocumentInfo>|null,
     *     sourceCode?: list<SourceCodeRepository>|null,
     *     integratedRepositories?: list<IntegratedRepository>|null,
     *     trustedCaCertificates?: list<TrustedCaCertificate>|null,
     *     clientCertificates?: list<ClientCertificate>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
