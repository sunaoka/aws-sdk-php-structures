<?php

namespace Sunaoka\Aws\Structures\SecretsManager\DescribeSecret;

trait DescribeSecretTrait
{
    /**
     * @param DescribeSecretRequest $args
     * @return DescribeSecretResponse
     */
    public function describeSecret(DescribeSecretRequest $args)
    {
        $result = parent::describeSecret($args->toArray());
        return new DescribeSecretResponse($result->toArray());
    }
}
