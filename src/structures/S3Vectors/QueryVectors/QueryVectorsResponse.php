<?php

namespace Sunaoka\Aws\Structures\S3Vectors\QueryVectors;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\QueryOutputVector> $vectors
 * @property 'euclidean'|'cosine' $distanceMetric
 */
class QueryVectorsResponse extends Response
{
}
